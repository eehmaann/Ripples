import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class SubstanceBox extends Component {
  constructor(props){
    super();
  } 
  render(){
    return(
      <div>
        <input type="text" onChange={this.props.substanceChange}/>
      </div>
    );
  }
}

export default SubstanceBox;