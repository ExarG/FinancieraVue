<template>
    <div>
        <h3 class="text-center">Edit Book</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateLoan">
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
                    <button type="submit" class="btn btn-primary">Update Book</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/loan/editl/${this.$route.params.id}`)
                .then((response) => {
                    this.loan = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateLoan() {
                this.axios
                    .post(`http://localhost:8000/api/loan/updatel/${this.$route.params.id}`, this.loan)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>