export default {

	state: {

      articles: []

	},

	getters: {

      getArticles(state){

         return state.articles
      }
	},

	actions: {
      allArticles(context){

         axios.get("api/articles")

            .then((response)=>{
               console.log(response.data)
               context.commit("SET_ARTICLES",response.data) 

            })

            .catch(()=>{
               
               console.log("Error........")
               
            })
       }
	},

	mutations: {
      SET_ARTICLES(state,data) {
         return state.articles = data
      }
	}
}