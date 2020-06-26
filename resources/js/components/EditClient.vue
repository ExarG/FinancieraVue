<template>
    <div>
        <h3 class="text-center">Edit Client</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateClient">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="client.name">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" v-model="client.phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Client</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                client: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/client/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.client = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateClient() {
                this.axios
                    .post(`http://localhost:8000/api/client/update/${this.$route.params.id}`, this.client)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>
