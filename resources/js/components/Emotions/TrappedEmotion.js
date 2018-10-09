import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import TrappedEmotionSourceButton from './TrappedEmotionSourceButton';
import Inherited from './Inherited';
import PastLifeDetail from './PastLifeDetail';
import PreNatalDetail from './PreNatalDetail';
import SelfLifeDetail from './SelfLifeDetail';

class TrappedEmotion extends Component {
  constructor(props){

    super(props);



       this.state = {
        emotion:'Idea ',
        trappedSource: 'Self' ,
        trappedRow:'2',
        trappedDetails'',

      };

     this.trappedSourceHandler = this.trappedSourceHandler.bind(this);
     this.addEmotionHandler= this.addEmotionChange.bind(this);
     this.onTrappedDetailsChange= this.onTrappedDetailsChange.bind(this);
  
  }

    trappedSourceHandler(origin) {
        this.setState({
           trappedSource: origin
        })
    }

    addEmotionHandler(feel) {
        this.setState({
           emotion:feel
        })
    }

  onTrappedDetailsChange(event) {
    event.preventDefault();
    this.setState({trappedDetails: event.target.value});
  }

  render() {
    return(
      <div>
        <p>{this.state.emotion} originating at {this.state.trappedSource}</p>
        <p> {this.state.trappedDetails}</p> 
        <p> Select where the trapped emotion is from</p>
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Self" />
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Pre-Natal" />
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Past-Life" />
        <TrappedEmotionSourceButton  action={this.trappedSourceHandler} origin="Inherited" />
        <EmotionRow  action={this.addEmotionHandler} feel="feel" row=this.state.trappedRow/>
        {if(trappedSource=="Self") 
          <Inherited detailsChange={this.onTrappedDetailsChange}/> 
        }{else if(trappedsoure="Pre-Natal")
          <PreNatalDetail detailsChange={this.onTrappedDetailsChange}/>
        }{else if (trappedSoure=="Past-Life")
          <PastLifeDetail detailsChange={this.onTrappedDetailsChange}/>
        }{else 
          <SelfLifeDetail detailsChange={this.onTrappedDetailsChange}/> 
        }  
      </div>
    );
  }  
}

export default TrappedEmotion;