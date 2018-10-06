import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class AllergyButton extends Component {
  constructor(props) {
    super();
  }
  render() {
    return(
      <button onClick={this.props.action}>
        {this.props.allergy}
      </button>
    );
  }  
}

export default AllergyButton;