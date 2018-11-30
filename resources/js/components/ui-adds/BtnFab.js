/**
 * Created by amihealthmel on 11/20/18.
 */
import React, { Component } from 'react';
import Grid from '@material-ui/core/Grid'
import Fab from '@material-ui/core/Fab'
import AddIcon from '@material-ui/icons/Add'
import withStyles from '@material-ui/core/styles/withStyles';
import axios from 'axios';
import PropTypes from 'prop-types';


const styles = theme => ({
    fabButton: {
        position: 'absolute',
        zIndex: 1,

        left: 0,
        right: 0,
        margin: '0 auto',
    },
    fab:{

        margin: theme.spacing.unit * 3 +'px auto',
    },

    extendedIcon: {
        marginRight: theme.spacing.unit,
    },
});

function FloatingActionButtons(props) {
    const { classes } = props;
    return (

            <Fab color="secondary" aria-label="Add" className={classes.fabButton}>
                <AddIcon />
            </Fab>

    );
}

FloatingActionButtons.propTypes = {
    classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(FloatingActionButtons);




