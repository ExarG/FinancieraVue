<template>
    <div>
        <h3 class="text-center">All Pays</h3><br/>
<router-link to="/addp" class="nav-item nav-link">Add Pays</router-link>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Payment</th>
                <th>Quantity</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="pay in pays" :key="pay.id">
                <td>{{ pay.id }}</td>
                <td>{{ pay.client }}</td>
                <td>{{ pay.payment }}</td>
                <td>{{ pay.quantity }}</td>
                <td>{{ pay.created_at }}</td>
                <td>{{ pay.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: pay.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deletePay(pay.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                pays: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/pays')
                .then(response => {
                    this.pays = response.data;
                });
        },
        methods: {
            deletePays(id) {
                this.axios
                    .delete(`http://localhost:8000/api/pay/deletep/${id}`)
                    .then(response => {
                        let i = this.pays.map(item => item.id).indexOf(id); 
                    });
            }
        }
    }
</script>