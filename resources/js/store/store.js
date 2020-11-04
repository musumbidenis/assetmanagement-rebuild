export default {
	state: {
      assets: []
	},

	getters: {
      getAssets(state){
         return state.assets
      }
	},

	actions: {
      allAssets(context){
         axios.get("/get/assets")
            .then((response)=>{
               console.log(response.data)
               context.commit("SET_ASSETS",response.data) 
            })
            .catch(()=>{
               console.log("Error........")
            })
       }
	},

	mutations: {
      SET_ASSETS(state,data) {
         return state.assets = data
      }
	}
}