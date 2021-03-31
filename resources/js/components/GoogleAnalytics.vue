<template>
    <card title="Google Analytics">
        <ul class="list-group" v-if="data">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Sessions
                <span class="badge badge-primary badge-pill">{{data['totalsForAllResults']['ga:sessions']}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                User
                <span class="badge badge-primary badge-pill">15</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Views
                <span class="badge badge-primary badge-pill">{{data['totalsForAllResults']['ga:pageviews']}}</span>
            </li>
        </ul>
    </card>
</template>

<script>
    import Card from "./Card";

    export default {
        components: {
            Card
        },
        data() {
            return {
                data: null
            }
        },
        mounted() {
            axios.get("/api/google-analytics").then((response) => {
                this.data = response.data;

                console.log(this.data);
            });
        },
    }
</script>
