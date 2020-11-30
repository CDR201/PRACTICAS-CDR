

<script>
import axios from 'axios';
    
    export default {
        data(){
            return{
                post: null
            }
    },

        mounted() {
            this.getPosts();
            console.log('Component mounted.')
        },
        methods:{
            getPosts: function(){
                axios.get('https://pokeapi.co/api/v2/pokemon/ditto/pokemon/1').then(response=>(
                    this.post=response.data
                ))
            }
        }
    }
</script>
