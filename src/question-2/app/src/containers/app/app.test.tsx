"use strict";

import React from "react";
import { screen, render, waitFor } from "@testing-library/react";
import { act } from "react-dom/test-utils";
import App from "./index";

const mockedResponse = {
  current_page: 1,
  data: [
    {
      fact: "data 1",
      length: 6,
    },
    {
      fact: "data 2",
      length: 6,
    },
    {
      fact: "data 3",
      length: 6,
    },
    {
      fact: "data 4",
      length: 6,
    },
    {
      fact: "data 5",
      length: 6,
    },
    {
      fact: "data 6",
      length: 6,
    },
    {
      fact: "data 7",
      length: 6,
    },
    {
      fact: "data 8",
      length: 6,
    },
    {
      fact: "data 9",
      length: 6,
    },
  ],
  first_page_url: "https://catfact.ninja/facts?page=1",
  from: 1,
  last_page: 37,
  last_page_url: "https://catfact.ninja/facts?page=37",
  links: [
    { url: null, label: "Previous", active: false },
    { url: "https://catfact.ninja/facts?page=1", label: "1", active: true },
    { url: "https://catfact.ninja/facts?page=2", label: "2", active: false },
    { url: "https://catfact.ninja/facts?page=3", label: "3", active: false },
    { url: "https://catfact.ninja/facts?page=4", label: "4", active: false },
    { url: "https://catfact.ninja/facts?page=5", label: "5", active: false },
    { url: "https://catfact.ninja/facts?page=6", label: "6", active: false },
    { url: "https://catfact.ninja/facts?page=7", label: "7", active: false },
    { url: "https://catfact.ninja/facts?page=8", label: "8", active: false },
    { url: "https://catfact.ninja/facts?page=9", label: "9", active: false },
    { url: "https://catfact.ninja/facts?page=10", label: "10", active: false },
    { url: null, label: "...", active: false },
    { url: "https://catfact.ninja/facts?page=36", label: "36", active: false },
    { url: "https://catfact.ninja/facts?page=37", label: "37", active: false },
    { url: "https://catfact.ninja/facts?page=2", label: "Next", active: false },
  ],
  next_page_url: "https://catfact.ninja/facts?page=2",
  path: "https://catfact.ninja/facts",
  per_page: "9",
  prev_page_url: null,
  to: 9,
  total: 332,
};

function sleep(ms: number) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

describe("App test", () => {
  it("should render cards", async () => {
    global.fetch = jest.fn(() =>
      Promise.resolve({
        ok: true,
        json: () => Promise.resolve(mockedResponse),
      })
    ) as any;

    act(() => {
      render(<App />);
    });

    await act(async () => {
      await sleep(500);
    });

    for (let i = 1; i <= 9; ++i) {
      expect(screen.getByText(`data ${i}`)).toBeDefined();
    }
  });
});
