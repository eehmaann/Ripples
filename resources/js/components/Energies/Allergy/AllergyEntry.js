import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class AllergyEntry extends Component {
  constructor(props) {
    super();
  }
  render() {
    return(
      <button onClick={ () => { this.props.action(this.props.monkey) } }>
        {this.props.monkey}
      </button>
    );
  }  
}

export default AllergyEntry;