import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import TrappedEmotionSourceButton from './TrappedEmotionSourceButton';
import IntegerBox from './IntegerBox'

class Inherited Component {
  constructor(props){

    super(props);

       this.state = {
        generationPattern:'',
        repeats: '' ,
        details:'',

      };

     this.trappedSourceHandler = this.trappedSourceHandler.bind(this);
     this.onRepeatTimesChange= this.onRepeatsChange.bind(this);
     this.
  
  }

    trappedSourceHandler(origin) {
        this.setState({
           generationPattern: this.state.generationPattern + origin
        })
    }

    detailsHandler(feel) {
        this.setState({
           details: "passed down from "
           + {this.state.generationPattern} 
           + " and this pattern repeats "
           + {this.state.repeats}
           + " times" 
        })
    }

  onRepeatTimesChange(event) {
    event.preventDefault();
    this.setState({repeats: event.target.value});
  }

  render() {
    return(
      <div>
        <p> What is next on the generational pattern? </p>
        <p> Current pattern: {this.state.generation} </p>
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Mother " />
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Father " />
        <p>How many times does the pattern repeat?</p>
        <IntegerBox numberChange={this.onRepeatTimesChange}/>


      </div>
    );
  }  
}

export default Inherited;