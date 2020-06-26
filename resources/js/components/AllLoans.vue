<template>
    <div>
        <h3 class="text-center">All Loans</h3><br/>
<router-link to="/addl" class="nav-item nav-link">Add Loans</router-link>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>quantity</th>
                <th>pays</th>
                <th>share</th>
                <th>total_to_pay</th>
                <th>date_mini</th>
                <th>date_expiration</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                
            <tr v-for="loan in loans" :key="loan.id">
                <td>{{ loan.id }}</td>
                <td>{{ loan.client }}</td>
                <td>{{ loan.quantity }}</td>
                <td>{{ loan.pays }}</td>
                <td>{{ loan.total_to_pay }}</td>
                <td>{{ loan.date_mini }}</td>
                <td>{{ loan.date_expiration }}</td>
                <td>{{ client.created_at }}</td>
                <td>{{ client.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: loan.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteLoan(loan.id)">Delete</button>
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
                loans: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/loans')
                .then(response => {
                    this.loans = response.data;
                });
        },
        methods: {
            deleteLoan(id) {
                this.axios
                    .delete(`http://localhost:8000/api/loan/deletel/${id}`)
                    .then(response => {
                        let i = this.loans.map(item => item.id).indexOf(id); // find index of your object
                        this.loans.splice(i, 1)
                    });
            }
        }
    }
</script>