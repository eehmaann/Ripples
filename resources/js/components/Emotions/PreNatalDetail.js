import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import TrappedEmotionSourceButton from './TrappedEmotionSourceButton';
import NameBox from './NameBox'

class PreNatalDetail Component {
  constructor(props){

    super(props);

       this.state = {
        relationship:'',
        person: '' ,

      };

     this.trappedSourceHandler = this.trappedSourceHandler.bind(this);
     this.onRepeatTimesChange= this.onRepeatsChange.bind(this);  
  }

    trappedSourceHandler(origin) {
        this.setState({
           relationship: origin
           person: origin
        })
    }

  onNameChange(event) {
    event.preventDefault();
    this.setState({person: event.target.value});
  }

  render() {
    return(
      <div>
        <p> Where did the emotion originate? </p>
        <p> Current pattern: {this.state.generation} </p>
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Mother " />
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Father " />
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Other " />
        {if(this.state.relationship =="Other"){
          <NameBox naming={this.onNameChange}/>
        }}
      </div>
    );
  }  
}

export default PreNatalDetail;