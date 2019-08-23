


function validation(rules) {
   let errors = [];
   Object.keys(rules).forEach(function (key) {

      try {
         Object.keys(rules[key]).some(function (rule_desc) {
            var BreakException = {};
            value = rules[key].value
            if (rule_desc === 'required' && value === "") {
               errors.push(key + ' is empty');

               throw BreakException;

            } else {
               if (rule_desc === 'max' && !(value.length <= rules[key].max)) {

                  errors.push(key + ' is to big');
               }
               if (rule_desc === 'min' && (value.length <= rules[key].min)) {

                  errors.push(key + ' is to small');
               }

               // console.log( value + ' ......... ' +rules[key].match);
               if (rule_desc === 'match' && value !== rules[key].match) {
                  errors.push(key + ' doesnt match');
               }
            }
            // console.log(value.length);



         });

      } catch (e) {

      }
   })
   return errors;
}
