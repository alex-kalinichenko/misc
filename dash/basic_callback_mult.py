# source: https://github.com/Coding-with-Adam/Dash-by-Plotly/blob/master/Callbacks/Basic%20Callback/basic_callback.py
# https://youtu.be/mTsZL-VmRVE

import pandas as pd
import plotly.express as px

import dash
import dash_core_components as dcc
import dash_html_components as html
from dash.dependencies import Input, Output, State

# Data source https://finance.yahoo.com  -Data owner: Stefano Leone on Kaggle
df = pd.read_csv(
 "https://raw.githubusercontent.com/Coding-with-Adam/Dash-by-Plotly/master/Callbacks/Basic%20Callback/Mutual-Funds.csv")

colors = ["black", "blue", "red", "yellow", "pink", "orange"]

app = dash.Dash(__name__)

app.layout = html.Div(
    children=[
        # id - id объекта к которому мы обращаемся в callback
        # value - значение свойства из component_property
        dcc.Dropdown(id='my-dropdown', multi=True,
                     options=[{'label': x, 'value': x} for x in sorted(df.fund_extended_name.unique())],
                     value=["Fidelity 500 Index Fund", "Fidelity Advisor Freedom 2035 Fund Class A",
                            "Fidelity Freedom 2035 Fund"]),
        html.Button(id='my-button', n_clicks=0, children="Show breakdown"),
        # приходит из update_my_graph(val_chosen)... return
        dcc.Graph(id='graph-output', figure={}),

        html.Div(id="sentence-output", children=["This is the color I love"], style={}),
        dcc.RadioItems(id='my-radioitem', value="black", options=[{'label': c, 'value': c} for c in colors]),
    ]
)


# Multiple Input, multiple Output, dash.no_update
# Множественный input и output должны быть в списке []
@app.callback(
    [Output('graph-output', 'figure'), Output('sentence-output', 'style')],
    [Input(component_id='my-radioitem', component_property='value'),
     Input(component_id='my-dropdown', component_property='value')],
    prevent_initial_call=False
)
def update_graph(color_chosen, val_chosen):
    if len(val_chosen) == 0:
        return dash.no_update, {"color": color_chosen}
    else:
        dff = df[df["fund_extended_name"].isin(val_chosen)]
        fig = px.pie(dff, values="ytd_return", names="fund_extended_name", title="Year-to-Date Returns")
        fig.update_traces(textinfo="value+percent").update_layout(title_x=0.5)
        return fig, {"color": color_chosen}


if __name__ == '__main__':
    app.run_server(debug=True)

# https://youtu.be/mTsZL-VmRVE
"""
The Dash Callback

You need to remember:
1. A Callback automatically triggers when the app is loaded (or browser refreshed). To prevent
that, you can use prevent_initial_callback=True
2. Whenever the component_property of the Input changes, the callback is triggered
3. The callback is NOT triggered when the component_property of the State changes.
4. Callback always needs an Input and Output, but not necessarily a State.
5. Every State and Input need to be represented as arguments inside the callback function.
6. The callback function returns data to the component_property of the Output.
7. Always make a copy of the dataframe you are changing inside the callback function.
8. Any given output (component/property pair) can only have one callback that sets it. They can&#39;t
be in two callbacks.
9. If the user triggers the callback but you don’t want the Output to update, raise PreventUpdate.
10. If the user triggers the callback but you want only some of the Outputs to update, return
Dash.no_update
"""
