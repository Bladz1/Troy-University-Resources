#ifndef PASSFAILACTIVITY_H
#define PASSFAILACTIVITY_H
#include "GradedActivity.h"

class PassFailActivity : public GradedActivity
{
protected:
    double minPassingScore;   // Minimum passing score
public:
    // Default constructor
    PassFailActivity() : GradedActivity()
        { minPassingScore = 0.0; }

    // Constructor
    PassFailActivity(double mps) : GradedActivity()
        { minPassingScore = mps; }

    // Mutator
    void setMinPassingScore(double mps)
        { minPassingScore = mps; }

    // Accessors
    double getMinPassingScore() const
        { return minPassingScore; }
        
        
    virtual char getLetterGrade() const;
};
#endif