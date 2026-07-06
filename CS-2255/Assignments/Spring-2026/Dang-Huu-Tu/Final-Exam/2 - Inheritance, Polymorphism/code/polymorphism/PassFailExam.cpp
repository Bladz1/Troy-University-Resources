#include "PassFailExam.h"

//************************************************************
// set function                                              *
// The parameters are the number of questions and the        *
// number of questions missed.                               *
//************************************************************

void PassFailExam::set(int questions, int missed)
{
    double numericScore; // To hold the numeric score

    // Set the number of questions and number missed.
    numQuestions = questions;
    numMissed = missed;

    // Calculate the points for each question.
    pointsEach = 100.0 / numQuestions;

    // Calculate the numeric score for this exam.
    numericScore = 100.0 - (missed * pointsEach);

    // Call the inherited setScore function to set
    // the numeric score.
    setScore(numericScore);
}