import React from "react";
import { CardDataType } from "../../types/card.types";
import Paper from "@material-ui/core/Paper";
import { styled } from "@material-ui/core/styles";

const Item = styled(Paper)(({ theme }) => ({
  ...theme.typography.body2,
  textAlign: "center",
  color: theme.palette.text.secondary,
  minHeight: 100,
  padding: "10px",
}));

const Card: React.FC<CardDataType> = (props: CardDataType) => {
  return <Item>{props.fact}</Item>;
};

export default Card;
