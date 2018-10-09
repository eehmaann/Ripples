import React, { Component } from 'react';
 
const Emotion = ({emotion}) => {
    
  if(!emotion) {
    return(<div>Definition not available </div>);
  }
     
  // Else, display the emotion data
  return(  
    <div> 
      <h2> {emotion.name} </h2>
      <p> {emotion.definition } </p>
    </div>
  )
}
 
export default Definition;