import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UnderlyingChoiceDisplay from'../underlyerChoice/UnderlyingChoiceDisplay'

class Allergy extends Component {
  constructor(){

    super();
    this.state = {
        allergy:''
        type:''
        prognosis: ''
    }
  }
  render() {
    return(
      <div>
        <p> {this.state.prognosis}</p>
        <UnderlyingChoiceDisplay/>
      </div>
    );
  }  
}

export default AHE;

if (document.getElementById('test')) {
    ReactDOM.render(<AHE />, document.getElementById('test'));
}