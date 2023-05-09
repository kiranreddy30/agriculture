#include <iostream>
#include <vector>
#include <queue>
#include <algorithm>

using namespace std;

const int INF = 1e9; 


struct Edge {
    int from, to, cap, flow;
};


int maxiFlow(vector<vector<int>>& graph, int s, int t) {
    int n = graph.size();
    vector<vector<Edge>> edges(n);
    for (int u = 0; u < n; u++) {
        for (int v = 0; v < n; v++) {
            if (graph[u][v] > 0) {
                edges[u].push_back({u, v, graph[u][v], 0});
                edges[v].push_back({v, u, 0, 0});
            }
        }
    }
    int maxFlow = 0;
    while (true) {
        vector<int> parent(n, -1);
        queue<int> q;
        parent[s] = s;
        q.push(s);
        while (!q.empty() && parent[t] == -1) {
            int u = q.front();
            q.pop();
            for (Edge& e : edges[u]) {
                if (parent[e.to] == -1 && e.cap > e.flow) {
                    parent[e.to] = u;
                    q.push(e.to);
                }
            }
        }
        if (parent[t] == -1) break;
        int flow = INF;
        for (int u = t; u != s; u = parent[u]) {
            for (Edge& e : edges[parent[u]]) {
                if (e.to == u) {
                    flow = min(flow, e.cap - e.flow);
                    break;
                }
            }
        }
        for (int u = t; u != s; u = parent[u]) {
            for (Edge& e : edges[parent[u]]) {
                if (e.to == u) {
                    e.flow += flow;
                    for (Edge& r : edges[e.to]) {
                        if (r.to == e.from) {
                            r.flow -= flow;
                            break;
                        }
                    }
                    break;
                }
            }
        }
        maxFlow += flow;
    }
    return maxFlow;
}


int main() {
    int n = 6;
    vector<vector<int>> graph(n, vector<int>(n));
    graph[0][1] = 16;
    graph[0][2] = 13;
    graph[1][2] = 10;
    graph[1][3] = 12;
    graph[2][1] = 4;
    graph[2][4] = 14;
    graph[3][2] = 9;
    graph[3][5] = 20;
    graph[4][3] = 7;
    graph[4][5] = 4;
    int s = 0, t = 5;
    int maxFlow = maxiFlow(graph, s, t);
    cout << "Maximum flow from " << s << " to " << t << " is " << maxFlow << endl; 
    return 0;
}
