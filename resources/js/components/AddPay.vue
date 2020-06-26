<template>
    <div>
        <h3 class="text-center">Add Pay</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addPay">
                    <div class="form-group"> 
                        <label>Client</label>
                        <input type="text" class="form-control" v-model="pay.client">
                    </div>
                    <div class="form-group">
                        <label>Payment</label>
                        <input type="text" class="form-control" v-model="pay.payment">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" v-model="pay.quantity">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Pay</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                pay: {}
            }
        },
        methods: {
            addPay() {

                this.axios
                    .post('http://localhost:8000/api/pay/addp', this.pay)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>