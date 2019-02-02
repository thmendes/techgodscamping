<template>
    <div class="x_content">
        <table class="table">
            <thead>
            <tr>  
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Camisesta</th>
                <th>Data Inscrição</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="person in peopleToShow" :key="person.id">
                    <td>{{ person.name }}</td>
                    <td>{{ person.email }}</td>
                    <td>{{ person.phone }}</td>
                    <td>{{ person.shirt }}</td>
                    <td>{{ person.created_at }}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-xs" v-on:click="getPerson(person.id)" data-toggle="modal" data-target="#myViewModal">
                            <i class="fa fa-folder"></i>
                            Visualizar
                        </a>
                        <a href="#" class="btn btn-info btn-xs" v-on:click="loadPersonToEdit(person.id)" data-toggle="modal" data-target="#myEditModal">
                            <i class="fa fa-pencil"></i>
                            Editar
                        </a>
                        <a href="#" class="btn btn-danger btn-xs" v-on:click="getPerson(person.id)" data-toggle="modal" data-target="#myDeleteModal">
                            <i class="fa fa-trash-o"></i>
                            Remover
                        </a>
                    </td>
                </tr>   
            </tbody>
        </table>
        <div class="modal fade" tabindex="-1" role="dialog" id="myViewModal" ref="vuemodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{{personModal.name}}</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tbody>
                                    <tr><td>CPF</td><td>{{ personModal.cpf }}</td></tr>
                                    <tr><td>RG</td><td>{{ personModal.rg }}</td></tr>
                                    <tr><td>Email</td><td>{{ personModal.email }}</td></tr>
                                    <tr><td>Telefone</td><td>{{ personModal.phone }}</td></tr>
                                    <tr><td>Data Nascimento</td><td>{{ personModal.born }}</td></tr>
                                    <tr><td>Endereço</td><td>{{ personModal.street }}</td></tr>
                                    <tr><td>Bairro</td><td>{{ personModal.neighbor }}</td></tr>
                                    <tr><td>Cidade</td><td>{{ personModal.city }}</td></tr>
                                    <tr><td>Estado</td><td>{{ personModal.province }}</td></tr>
                                    <tr><td>Responsável- Nome</td><td>{{ personModal.parent }}</td></tr>
                                    <tr><td>Responsável - Telefone</td><td>{{ personModal.parent_phone }}</td></tr>
                                    <tr><td>Num. Cartão SUS</td><td>{{ personModal.sus }}</td></tr>
                                    <tr><td>Medicamento Contínuo</td><td>{{ personModal.medicine }}</td></tr>
                                    <tr><td>Cuidados Médicos</td><td>{{ personModal.medicalCare }}</td></tr>
                                    <tr><td>Camiseta</td><td>{{ personModal.shirt }}</td></tr>
                                    <tr><td>Observações</td><td>{{ personModal.obs }}</td></tr>
                                </tbody>
                            </thead>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="myDeleteModal" ref="vuemodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <center>
                            <p>Deseja realmente remover {{personModal.name}} da lista de cadastros?</p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="deletePerson(personModal.id)">Excluir</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="myEditModal" ref="vuemodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edição de cadastro</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tbody>
                                    <tr><td>Nome</td><td><input class="form-control" type="text" v-model="personToEdit.name" ></td></tr>
                                    <tr><td>CPF</td><td><input class="form-control" type="text" v-model="personToEdit.cpf" ></td></tr>
                                    <tr><td>RG</td><td><input class="form-control" type="text" v-model="personToEdit.rg" ></td></tr>
                                    <tr><td>E-mail</td><td><input class="form-control" type="text" v-model="personToEdit.email" ></td></tr>
                                    <tr><td>Telefone</td><td><input class="form-control" type="text" v-model="personToEdit.phone" ></td></tr>
                                    <tr><td>Data Nascimento</td><td><input class="form-control" type="date" v-model="personToEdit.born" ></td></tr>
                                    <tr><td>Endereço</td><td><input class="form-control" type="text" v-model="personToEdit.street" ></td></tr>
                                    <tr><td>Bairro</td><td><input class="form-control" type="text" v-model="personToEdit.neighbor" ></td></tr>
                                    <tr><td>Cidade</td><td><input class="form-control" type="text" v-model="personToEdit.city" ></td></tr>
                                    <tr><td>Estado</td><td><input class="form-control" type="text" v-model="personToEdit.province" ></td></tr>
                                    <tr><td>Responsável - Nome</td><td><input class="form-control" type="text" v-model="personToEdit.parent" ></td></tr>
                                    <tr><td>Responsável - Telefone</td><td><input class="form-control" type="text" v-model="personToEdit.parent_phone" ></td></tr>
                                    <tr><td>Num. Cartão SUS</td><td><input class="form-control" type="text" v-model="personToEdit.sus" ></td></tr>
                                    <tr><td>Medicamento Contínuo</td><td><input class="form-control" type="text" v-model="personToEdit.medicine" ></td></tr>
                                    <tr><td>Cuidados Médicos</td><td><input class="form-control" type="text" v-model="personToEdit.medicalCare" ></td></tr>
                                    <tr><td>Camiseta</td><td>
                                        <select class="form-control" type="text" v-model="personToEdit.shirt" >
                                            <option value="">Selecione</option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>
                                            <option value="8">8</option>
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                            <option value="14">14</option>
                                            <option value="16">16</option>
                                            <option value="PP">PP</option>
                                            <option value="P">P</option>
                                            <option value="M">M</option>
                                            <option value="G">G</option>
                                            <option value="GG">GG</option>
                                            <option value="XG">XG</option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                        </select></td></tr>
                                    <tr><td>Observações</td><td><input type="text" class="form-control" v-model="personToEdit.obs" ></td></tr>
                                </tbody>
                            </thead>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success" v-on:click="updatePerson" data-dismiss="modal">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import bus from './../../bus.js'
export default 
{
    props:
    {
        people: Array    
    },
    data() {
        return {
            personModal: [],
            personToEdit: [],
            peopleToShow: []
        }
    },
    methods: {
        getPerson(idPerson){
            this.people.forEach(element => {
                if(element.id == idPerson)
                    this.personModal = element
            });
        },
        setPerson(person){
            this.people.forEach(element =>{
                if(person.id == element.id)
                    element = person;
            })
        },
        loadPersonToEdit(idPerson)
        {
            this.getPerson(idPerson);
            this.personToEdit = this.personModal;
        },
        updatePerson(person){
            this.$http.post('/api/pessoas', JSON.stringify(this.personToEdit), {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            .then(response => {
                if(response.data['error'] != "")
                    alert('Não foi possível alterar esse cadastro.');    

                this.setPerson(this.personToEdit);
                alert('Cadastro alterado com sucesso!');    
            }).catch(error => {
                alert('Não foi possível alterar esse cadastro.');
            });
        },
        deletePerson(personId)
        {
            this.$http.delete('/api/pessoas/' + personId, {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            .then(response => {
                if(response.data['error'] != "")
                    alert('Não foi possível excluir esse cadastro.');
                
                var index = this.people.map(function(e) { return e.id; }).indexOf(personId);

                if (index > -1){
                    this.people.splice(index, 1);
                    alert('Cadastro removido com sucesso!');
                }

            }).catch(error => {
                alert('Não foi possível excluir esse cadastro.');
            });
        },
        syncPeople(){
            this.peopleToShow = this.people;
        }
    },
    computed: {
        },
    mounted(){
        this.syncPeople();
    }
}
</script>