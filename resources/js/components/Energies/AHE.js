import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UnderlyingChoiceDisplay from'../underlyerChoice/UnderlyingChoiceDisplay'

class AHE extends Component {
  constructor(){

    super();
    this.state = {
        prognosis: 'Addictive Heart Energy'
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