import React from 'react';

const List = (props) => (
  <li id={props.index} 
    className={ (props.index === props.count) ? 'active menu-item' : 'menu-item'} 
  >
    <a href={props.post.url} >
      <div className="list_item_container" title={props.post.title}>
        <div className="image">
            <img src={props.post.image} />
        </div>
        <div className="label">
            <h4>{ props.post.title  }</h4>
        </div>
      </div>
    </a>
  </li>
);

export default List;