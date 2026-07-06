#ifndef PASSFAILEXAM_H
#define PASSFAILEXAM_H
#include "PassFailActivity.h"

class PassFailExam : public PassFailActivity
{
private:
    int numQuestions;    // Number of questions
    double pointsEach;   // Points for each question
    int numMissed;       // Number of questions missed
public:
    // Default constructor
    PassFailExam() : PassFailActivity()
        { numQuestions = 0;
          pointsEach = 0.0;
          numMissed = 0; }

    // Constructor
    PassFailExam(int questions, int missed, double mps) :
        PassFailActivity(mps)
        { set(questions, missed); }
        
    // Mutator function
    void set(int, int);    // Defined in PassFailExam.cpp

    // Accessor functions
    double getNumQuestions() const
        { return numQuestions; }

    double getPointsEach() const
        { return pointsEach; }

    int getNumMissed() const
        { return numMissed; }
};
#endif