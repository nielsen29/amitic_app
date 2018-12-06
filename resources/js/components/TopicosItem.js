import React from 'react';
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import ListItem from '@material-ui/core/ListItem';

const styles = theme => ({
    root: {
        width: '100%',
        maxWidth: '360px',
        backgroundColor: theme.palette.background.paper,
    },
});

function TopicosItem(props) {
    const { topicos } = props;

    return (
        <ListItem button key={topicos.id} >
            <h5 >{topicos.nombre}</h5>
        </ListItem>
    );
}

TopicosItem.propTypes = {
    classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(TopicosItem);
