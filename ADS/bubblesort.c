#include <stdio.h>
void main()
{
int i,n,j,temp;
printf("\n Enter the size of the array : ");
scanf("%d",&n);
int a[n];
printf("\n Enter the %d elements to the array : ",n);
for(i=0;i<n;i++)
{
scanf("%d",&a[i]);
}
printf("\n The entered array elements are : \n");
for(i=0;i<n;i++)
{
printf("\t %d",a[i]);
}

for(i=0;i<n;i++)
{
for(j=i+1;j<n;j++)
  {
  if(a[i]>a[j])
  {
  temp=a[i];
  a[i]=a[j];
  a[j]=temp;
  }
  }
}
  printf("\n the array after buble sort is :\n");
for(i=0;i<n;i++)
{
printf("\t %d ",a[i]);
}
}