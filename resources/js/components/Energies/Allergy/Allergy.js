import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UnderlyingChoiceDisplay from'.../underlyerChoice/UnderlyingChoiceDisplay';
import AllergyConstructor from './AllergyConstructor';

class Allergy extends Component {
  render() {
    return(
      <div>
        <AllergyConstructor/>
        <UnderlyingChoiceDisplay/>
      </div>
    );
  }  
}

export default Allergy;

if (document.getElementById('test')) {
    ReactDOM.render(<Allergy />, document.getElementById('test'));
}