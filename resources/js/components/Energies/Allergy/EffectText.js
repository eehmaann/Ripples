import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class EffectText extends Component {
  constructor(props){
    super();
  } 
  render(){
    return(
      <div>
        <p> Allergic to what?</p>
        <input type="text" onChange={this.props.effectChange}/>
      </div>
    );
  }
}

export default EffectText;