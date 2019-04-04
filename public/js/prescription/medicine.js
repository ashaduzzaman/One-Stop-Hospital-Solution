const app2 = new Vue({
    el: '#medicine',
    data: {
        newMedicine: '',
        medicines: []
      },
      methods: {
          addMedicine:function(){
              this.medicines.push({
                  name: this.newMedicine,
              });
              this.newMedicine='';
              
          },
          removeMedicine:function(medicine){
              const index = this.medicines.indexOf(medicine);
              this.medicines.splice(index, 1);
          }
      }
});
