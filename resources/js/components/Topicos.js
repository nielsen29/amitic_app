import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import TopicosItem from './TopicosItem'

import Paper from '@material-ui/core/Paper';
import Typography from '@material-ui/core/Typography';


import GridList from '@material-ui/core/GridList';
import GridListTile from '@material-ui/core/GridListTile';
import ListSubheader from '@material-ui/core/ListSubheader';


export default class Topicos extends Component {
    constructor(props) {

        super(props);

        this.state = {
            topicos: [],
        }

        this.renderTopicos=this.renderTopicos.bind(this);
    }

    componentDidMount(){
        axios.get('api/topicos')
            .then(response => {
                this.setState({ topicos: response.data });
            })
            .catch(function (error) {
                console.log(error);
            })
    }

    renderTopicos(){

        return(
            <Paper elevation={1}>

                    <GridList cellHeight={'auto'} style={{
                        display: 'flex',
                        flexWrap: 'wrap',
                        justifyContent: 'space-around',
                        overflow: 'hidden',
                        backgroundColor: 'white', }}>

                        <GridListTile key="Subheader" cols={2} style={{ height: 'auto' }}>
                            <ListSubheader component="div">
                                <Typography variant="h5" component="h3">
                                    Topicos:
                                </Typography>
                            </ListSubheader>
                        </GridListTile>

                        {this.state.topicos.map(topico => (
                            <GridListTile key={topico.id}>
                                <TopicosItem topicos={topico}/>
                            </GridListTile>
                        ))}
                    </GridList>
            </Paper>
        );
    }

    render() {
        return (
            <div>
                {this.renderTopicos()}

            </div>
        )
    }
}

if (document.getElementById('topicos')) {
    ReactDOM.render(<Topicos />, document.getElementById('topicos'));
}