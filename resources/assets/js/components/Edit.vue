<template>

<div class="modal " :class='openmodal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete" aria-label="close" @click='close'></button>
    </header>
    <section class="modal-card-body">
     <div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input"  type="text" value="{{list.name}}">
  
  </div>
 
</div>

 <div class="field">
  <label class="label">Phone</label>
  <div class="control">
    <input class="input"  type="number" value="{{list.phone}}" >
  
  
  </div>

</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input"  type="email" value="{{list.email}}" >
  
  </div>
 
  
</div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" @click="save">Save changes</button>
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