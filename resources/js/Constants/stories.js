export const COLOR_YELLOW = 'text-yellow-500';
export const COLOR_BLUE = 'text-sky-500';
export const COLOR_GREEN = 'text-green-500';

export const STORY_STATUS_IN_PROCESS = 'inProcess';
export const STORY_STATUS_FROZEN = 'frozen';
export const STORY_STATUS_COMPLETED = 'completed';

export const STORY_STATUES = {
  [STORY_STATUS_IN_PROCESS]: 'В процессе',
  [STORY_STATUS_FROZEN]: 'Заморожен',
  [STORY_STATUS_COMPLETED]: 'Завершен',
};

export const STORY_STATUSES_COLORS = {
  [STORY_STATUS_IN_PROCESS]: COLOR_YELLOW,
  [STORY_STATUS_FROZEN]: COLOR_BLUE,
  [STORY_STATUS_COMPLETED]: COLOR_GREEN,
};

export const STORY_DIRECTION_GET = 'get';
export const STORY_DIRECTION_GEN = 'gen';
export const STORY_DIRECTION_SLASH = 'slash';

export const STORY_DIRECTIONS = {
  [STORY_DIRECTION_GET]: 'Гет',
  [STORY_DIRECTION_GEN]: 'Джен',
  [STORY_DIRECTION_SLASH]: 'Слэш',
};

export const STORY_DIRECTIONS_COLORS = {
  [STORY_DIRECTION_GET]: COLOR_GREEN,
  [STORY_DIRECTION_GEN]: COLOR_YELLOW,
  [STORY_DIRECTION_SLASH]: COLOR_BLUE,
};

export const STORY_RATING_G = 'g';
export const STORY_RATING_PG12 = 'pg12';
export const STORY_RATING_PG16 = 'pg16';
export const STORY_RATING_PG18 = 'pg18';

export const STORY_RATINGS = {
  [STORY_RATING_G]: {
    label: 'G',
    description: '6+',
  },
  [STORY_RATING_PG12]: {
    label: 'PG12',
    description: '12+',
  },
  [STORY_RATING_PG16]: {
    label: 'PG16',
    description: '16+',
  },
  [STORY_RATING_PG18]: {
    label: 'PG18',
    description: '18+',
  },
};

export const STORY_SIZE_MINI = 'mini';
export const STORY_SIZE_MIDI = 'midi';
export const STORY_SIZE_MAXI = 'maxi';

export const STORY_SIZES = {
  [STORY_SIZE_MINI]: 'Мини',
  [STORY_SIZE_MIDI]: 'Миди',
  [STORY_SIZE_MAXI]: 'Макси',
};
