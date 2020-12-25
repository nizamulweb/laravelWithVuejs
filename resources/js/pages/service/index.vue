<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                      <router-link :to="{name:'create_service'}" class="badge badge-primary text-right">New Service</router-link>
                    </div>

                    <div class="card-body">
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Service Name</th>
                              <th scope="col">Service Date</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                         
                             
                            <tr v-for="service in allservicedata" :key="service.id">
                              <th scope="row">{{service.id}}</th>
                              <td>{{service.service_name}}</td>
                               <td>{{service.service_date}}</td>
                            
                              <td>
                                <a href="" class="btn btn-info btn-xs">Edit</a>
                                  <a href="" class="btn btn-primary btn-xs">View</a>
                                <a href="" class="btn btn-danger btn-xs">Delete</a>

                              </td>
                            </tr>
                          
                         
                          
                          </tbody>
                        </table>
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
             allservicedata:[]

            }
         },
         methods:{
            loadallService(){
              
                axios.get('/api/frontservice').then(response=>{
                      this.allservicedata=response.data;
                });
            }
         },

         mounted(){
            this.loadallService()
         }
    }
</script>
