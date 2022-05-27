import React, { useState, useEffect } from "react";
import Grid from "@material-ui/core/Grid";
import Card from "../../components/card";
import { CardDataType } from "../../types/card.types";

function App() {
  const [cardData, setCardData] = useState([]);

  useEffect(() => {
    fetch("https://catfact.ninja/facts?limit=9")
      .then((response) => response.json())
      .then((data) => {
        const newCardData = data.data.sort((a: CardDataType, b: CardDataType) =>
          a.fact.localeCompare(b.fact)
        );
        setCardData(newCardData);
      });
  }, []);

  return (
    <Grid container spacing={2} data-testid="app">
      {cardData.map((cardInfo, index) => (
        <Grid item xs={12} md={4} key={`grid-${index}`}>
          <Card {...cardInfo} />
        </Grid>
      ))}
    </Grid>
  );
}

export default App;
