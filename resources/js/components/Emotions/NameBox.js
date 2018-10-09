import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class NameBox extends Component {
  constructor(props){
    super();
  } 
  render(){
    return(
      <div>
        <input type="text" onChange={this.props.naming}/>
      </div>
    );
  }
}

export default NameBox;