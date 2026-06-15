#include "PassFailActivity.h"

char PassFailActivity::getLetterGrade() const
{
    if (score >= minPassingScore)
        return 'P';
    else
        return 'F';
}