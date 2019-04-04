const app = new Vue({
    el: '#symptom',
    data: {
        newSymptom: '',
        symptoms: []
      },
      methods: {
          addSymptoms:function(){
              this.symptoms.push({
                  name: this.newSymptom,
              });
              this.newSymptom='';
              console.log(this.symptoms);

              
                axios.post('/prescriptions/test', this.$data.symptoms)
                    .then((response) => {
                        alert('Success add Artist')
                        console.log(response)
                    })
            
              
          },
          removeSymptom:function(symptom){
              const index = this.symptoms.indexOf(symptom);
              this.symptoms.splice(index, 1);
          }
      }
});

