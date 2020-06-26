<template>
    <div>
        <h3 class="text-center">Edit Pay</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatePay">
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
                    <button type="submit" class="btn btn-primary">Update Pay</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/pay/editp/${this.$route.params.id}`)
                .then((response) => {
                    this.pay = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updatePay() {
                this.axios
                    .post(`http://localhost:8000/api/pay/updatep/${this.$route.params.id}`, this.book)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>