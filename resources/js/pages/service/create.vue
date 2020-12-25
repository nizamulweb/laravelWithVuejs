<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Service page
                          <router-link :to="{name:'index_service'}" class="badge badge-primary text-right">AllService</router-link>
                    </div>

                    <div class="card-body">

                       <form @submit.prevent="createService">
                         <div class="form-group">
                            <label for="exampleInputEmail1">Service Name</label>
                            <input type="text" name="service_name" v-model="service_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Name">
                         
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="date" name="service_date" v-model="service_date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                        
                          <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
         data(){
            return{
                service_name:'',
                service_date:'',

            }
         },
         methods:{
            createService(){
              
                axios.post('/api/frontservice',{service_name:this.service_name,service_date:this.service_date}).then(response=>{
                      console.log(response);
                });
            }
         }
    }
</script>
