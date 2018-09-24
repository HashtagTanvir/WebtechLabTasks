#include<stdio.h>
#include<GL/gl.h>
#include<GL/glut.h>
#include<math.h>

void DisplayShip(void);
int main(int argcp,char** argv){
    glutInit(&argcp,argv);
    glutInitDisplayMode(GLUT_SINGLE| GLUT_RGB);
    glutInitWindowSize(600,600);
    glutInitWindowPosition(200,50);
    glutCreateWindow("Ship");

    ///Display function.....
    glutDisplayFunc(DisplayShip);

    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
    glClearColor(1.0,1.0,1.0,0.0);
    gluOrtho2D(0.0,600.0,0.0,600.0);


    glutMainLoop();


}
void DisplayShip(void){
    glClear(GL_COLOR_BUFFER_BIT);
    glColor3f(0.0,128.0,255.0);
    glPointSize(5.0);

    glBegin(GL_POLYGON);
    glVertex2i(300,200);
    glVertex2i(450,200);
    glColor3f(1.0,0.0,0.0);
    glVertex2i(570,280);
    glVertex2i(180,280);
    glEnd();

    glColor3f(128.0,128.0,128.0);
    glBegin(GL_POLYGON);
    glVertex2i(450,280);
    glVertex2i(450,350);
    glColor3f(0.0,0.0,0.0);
    glVertex2i(430,350);
    glVertex2i(430,280);
    glEnd();

    glColor3f(128.0,128.0,128.0);

    glBegin(GL_POLYGON);
    glVertex2i(400,280);
    glVertex2i(400,400);
    glColor3f(0.0,0.0,0.0);
    glVertex2i(350,400);
    glVertex2i(350,280);
    glEnd();

    glColor3f(128.0,128.0,128.0);
    glBegin(GL_POLYGON);
    glVertex2i(320,280);
    glVertex2i(320,350);
    glColor3f(0.0,0.0,0.0);
    glVertex2i(300,350);
    glVertex2i(300,280);
    glEnd();

    ///For cloud ball
    glColor3f(0.0,0.0,0.0);
    float round;
    glBegin(GL_POLYGON);
    for(int i=0;i<360;i++){
        round=i*3.1416/180;
        glVertex2f(515+15*cos(round),440+8*sin(round));
    }
    glEnd();


    glBegin(GL_POLYGON);
    for(int i=0;i<360;i++){
        round=i*3.1416/180;
        glVertex2f(385+20*cos(round),420+10*sin(round));

    }
    glEnd();

    glBegin(GL_POLYGON);
    for(int i=0;i<360;i++)
    {
        round=i*3.1416/180;
        glVertex2f(400+20*cos(round),450+10*sin(round));

    }

    glEnd();


    glBegin(GL_POLYGON);
    for(int i=0;i<360;i++)
    {
        round=i*3.1416/180;
        glVertex2f(420+20*cos(round),470+10*sin(round));

    }

    glEnd();





    glBegin(GL_POLYGON);
    for(int i=0;i<360;i++)
    {
        round=i*3.1416/180;
        glVertex2f(310+12*cos(round),370+8*sin(round));

    }

    glEnd();



    glBegin(GL_POLYGON);
    for(int i=0;i<360;i++)
    {
        round=i*3.1416/180;
        glVertex2f(320+12*cos(round),390+8*sin(round));

    }

    glEnd();


    glBegin(GL_POLYGON);
    for(int i=0;i<360;i++)
    {
        round=i*3.1416/180;
        glVertex2f(330+12*cos(round),410+8*sin(round));

    }

    glEnd();
    glFlush();
}
