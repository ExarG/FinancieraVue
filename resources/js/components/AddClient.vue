<template>
    <div>
        <h3 class="text-center">Add Client</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addClient">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="client.name">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" v-model="client.phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Client</button>
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
        methods: {
            addClient() {

                this.axios
                    .post('http://localhost:8000/api/client/add', this.client)
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
