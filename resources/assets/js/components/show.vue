<template>


<div class="modal " :class='openmodal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">{{list.name}}'s details</p>
      <button class="delete" aria-label="close" @click='close'></button>
    </header>
    <section class="modal-card-body">
   

 <div class="field">
     <li class="panel-block">
  <label class="column is-2">Name</label>{{list.name}}</li>
 

 <li class="panel-block">
  <label class="column is-2">Phone</label>{{list.phone}}</li>
 

  <li class="panel-block">
  <label class="column is-2">Email</label>{{list.email}}</li>
 




</div>


    </section>
    <footer class="modal-card-foot">
   
      <button class="button" @click="close">Cancel</button>
    </footer>
  </div>
</div>




</template>


<script>

export default {
    props:['openmodal'],

    data(){


       return{

    list:{

name:'',
phone:'',
email:''

    },
    }


},
 methods:{
        close(){

            this.$emit('closeRequest')
        },

 }
}

</script>