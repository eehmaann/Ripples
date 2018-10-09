import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class IntegerBox extends Component {
  constructor(props){
    super();
  } 
  render(){
    return(
      <div>
        <input type="number" onChange={this.props.numberChange}/>
      </div>
    );
  }
}

export default IntegerBox;
