<template>
    <div>
        <h3 class="text-center">Add Loan</h3>
        
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addLoan">
      
                    <div class="form-group">
                        <label>Client</label>
                        <input type="text" class="form-control" v-model="loan.client">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" v-model="loan.quantity">
                    </div>
                     <div class="form-group">
                        <label>Pays</label>
                        <input type="text" class="form-control" v-model="loan.pays">
                    </div>
                    <div class="form-group">
                        <label>Total a Pagar</label>
                        <input type="text" class="form-control" v-model="loan.total_to_pay">
                    </div>
                     <div class="form-group">
                        <label>Fecha de ministracion</label>
                        <input type="text" class="form-control" v-model="loan.date_mini">
                    </div>
                    <div class="form-group">
                        <label>Fecha de expiracion</label>
                        <input type="text" class="form-control" v-model="loan.date_expiration">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Loan</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loan: {}
            }
        },
        methods: {
            addLoan() {

                this.axios
                    .post('http://localhost:8000/api/loan/addl', this.loan)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>