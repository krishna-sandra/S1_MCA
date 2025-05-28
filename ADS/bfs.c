#include <stdio.h>

// Graph G with V vertices
int G[50][50] = {0}, V;
// for tracking visited nodes ,Queue front and rear
int Visted[10]={0}, Q[10], F = -1, R = -1;

void read()
{
    int ip;
    printf("Enter the number of vertices: ");
    scanf("%d", &V);
    printf("Input the adjaceny matirx: \n");
    printf("if (i,j) has an edge then input 1 else 0\n");

    for (int i = 1; i <= V; i++)
    {
        for (int j = i; j <= V; j++)
       {
            if (i != j)
            {
                printf("(%d,%d)=>", i, j);
                scanf("%d", &ip);
                G[i][j] = G[j][i] = ip;
            }
        }
    }
}
void display()
{
    printf("The adjaceny matrix is:\n");
    for (int i = 1; i <= V; i++)
    {
        for (int j = 1; j <= V; j++)
        {
            printf("%d ", G[i][j]);
        }
        printf("\n");
    }
}
void bfs(int x)
{
    printf("BFS:\n");
    F = R = 1;
    Q[R] = x;
    Visted[x]=1;
    printf("%d ", x);
    while(F<=R)
    {
        x = Q[F];
        F += 1;
        for (int j = 1; j <= V; j++)
        {
            if (G[x][j] && !Visted[j])
            {
                printf("%d ", j);
                Visted[j] = 1;
                R += 1;
                Q[R] = j;
            }
        }
    }
}
int main()
{
    read();

    display();
    int x;
    printf("Enter the starting vertex: ");
    scanf("%d", &x);
    bfs(x);
    return 0;
}