#include <stdio.h>
#include <GL/gl.h>
#include <GL/glut.h>

void myDisplay(void)
{
    glClear (GL_COLOR_BUFFER_BIT);
    glColor3f (0.0, 0.0, 0.0);
    glPointSize(20.0);
    int c=1;
    for(int x=200;x<600;x+=50)
    {
        c++;
        for(int y=200;y<600;y+=50)
        {
            if(c%2==0)
            {
                glColor3f (0.0, 0.0, 0.0);
            }
            else
            {
                glColor3f (1.0, 1.0, 1.0);
            }
            glBegin(GL_QUADS);
            glVertex2i(y+0,x+0);
            glVertex2i(y+50,x+0);
            glVertex2i(y+50,x+50);
            glVertex2i(y+0,x+50);
            glEnd();
            c++;
        }
     }

    glFlush ();
}
void myInit (void)
{
    glClearColor(1.0, 1.0, 1.0, 0.0);
    glColor3f(0.0f, 0.0f, 0.0f);
    glPointSize(4.0);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluOrtho2D(0.0, 800.0, 0.0, 800.0);
}


int main(int argc, char** argv)
{
    glutInit(&argc, argv);
    glutInitDisplayMode (GLUT_SINGLE | GLUT_RGB);
    glutInitWindowSize (800, 800);
    glutInitWindowPosition (0,0);
    glutCreateWindow ("Chessboard");
    glutDisplayFunc(myDisplay);
    myInit ();
    glutMainLoop();
}

