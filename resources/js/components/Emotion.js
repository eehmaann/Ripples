import React, { Component } from 'react';
import ReactDOM from 'react-dom';
 
/* Emotion Component */
export default class Emotion extends Component {
 
  constructor() {
   
    super();
    //Initialize the state in the constructor
    this.state = {
        emotions: [],
    }
  }
  /*componentDidMount() is a lifecycle method
   * that gets called after the component is rendered
   */
  componentDidMount() {
    /* fetch API in action */
    fetch('/api/emotions')
        .then(response => {
            return response.json();
        })
        .then(emotions => {
            //Fetched product is stored in the state
            this.setState({ emotions });
        });
  }
 
 renderEmotions() {
    return this.state.emotions.map(emotion => {
        return (
            /* When using list you need to specify a key
             * attribute that is unique for each list item
            */
            <li key={emotion.id} >
                { emotion.name} 
            </li>      
        );
    })
  }

  renderEmotionGroup(row, col){
    return this.state.emotions.map(emotion =>{
      if (emotion.row_name ==row && emotion.col_name == col ){
        return (
        <li key={emotion.id} >
                { emotion.name} 
        </li>    
        );
      }
    })
  }
   
  render() {
   /* Some css code has been removed for brevity */
    return (
        <div>
          <p> This is where emotions will be.</p>
              <p> Coloumn A</p>
              <ul>
                { this.renderEmotionGroup(1, 1) }
              </ul>
              <p> Column B </p>
              <ul>
                {this.renderEmotionGroup(1, 2)}
              </ul>
 
        </div> 
       
    );

  }
}

if (document.getElementById('emotion')) {
    ReactDOM.render(<Emotion/>, document.getElementById('emotion'));
}