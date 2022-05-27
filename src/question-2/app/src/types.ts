export type Booking = {
  /** Unique uuid for the booking */
  id: string;
  title: string;
  time: Date;
  /** Price of the booking in pence / cents */
  price: number;
};
