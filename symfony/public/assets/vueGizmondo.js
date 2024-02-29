import { GizmondoRepository } from "./GizmondoRepository.js";

const app = {
    data() {
        return {
            gameList: []
         }
    },
    async mounted() {
        this.gameList = await GizmondoRepository.fetchGames();
    },
    computed: {
        nbGames() {
            return this.gameList.length;
        }
    }
}


Vue.createApp(app).mount('#gizmondo');