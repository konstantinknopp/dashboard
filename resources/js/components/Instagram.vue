<template>
    <card title="Instagram">
        <ul class="list-group" v-if="data">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Abonnenten
                <span class="badge badge-primary badge-pill">{{data.counts.followed_by}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Beiträge
                <span class="badge badge-primary badge-pill">{{data.counts.media}}</span>
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
            axios.get("/api/instagram").then((response) => {
                this.data = response.data;
            });
        },
    }
</script>
